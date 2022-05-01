#include <stdio.h>
#include <curl/curl.h>
#include <stdlib.h>
#include <unistd.h>
#include "json-c/json.h"
#include <assert.h>
#include "ConnectBDD.c"

static size_t write_data(void *ptr, size_t size, size_t nmemb, void *stream)
{
    size_t written = fwrite(ptr, size, nmemb, (FILE *)stream);
    return written;
}


int main(void)
{
    curl_global_init(CURL_GLOBAL_ALL);
    CURL *curl;
    CURLcode res;
    curl = curl_easy_init();
    MYSQL *DBConnect = initDb();
    const char *weatherfilename = "weather.json";
    FILE *fp =fopen(weatherfilename,"w");
    if (fp == NULL) return 1;
    fputs("SET @json='",fp);
    if(curl) {
        curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_easy_setopt(curl, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather?q=Lyon&appid=70d7c9b9968a8752da6284c07884a411&units=metric");
        /* no progress meter please */
        curl_easy_setopt(curl, CURLOPT_NOPROGRESS, 1L);
        /*stocker les valeurs dans la fonction*/
        curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, write_data);

        /* écriture des données */
        curl_easy_setopt(curl, CURLOPT_WRITEDATA, fp);
        /* Perform the request, res will get the return code */

        res = curl_easy_perform(curl);
        fputs("'",fp);
        fclose(fp);
        /* Check for errors */
        if(res != CURLE_OK)
            fprintf(stderr, "curl_easy_perform() failed: %s\n",
                    curl_easy_strerror(res));

        /* always cleanup */
        curl_easy_cleanup(curl);
    }

    initPreparedStatements(DBConnect);

    return 0;
}
