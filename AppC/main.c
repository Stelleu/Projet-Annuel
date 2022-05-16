#include <stdio.h>
#include <curl/curl.h>
#include <stdlib.h>
#include "json-c/json.h"
#include "ConnectBDD.c"
#include <string.h>


static size_t write_data(void *ptr, size_t size, size_t nmemb, void *stream)
{
    size_t written = fwrite(ptr, size, nmemb, (FILE *)stream);
    return written;
}
int curlAPI(char *file_name){
    curl_global_init(CURL_GLOBAL_ALL);
    CURL *curl;
    CURLcode res;
    curl = curl_easy_init();
    FILE *fp =fopen(file_name,"w");
    if (fp == NULL) return -1;
//    fputs("SET @json='",fp);
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
//        fputs("'",fp);
        fclose(fp);
        /* Check for errors */
        if(res != CURLE_OK)
            fprintf(stderr, "curl_easy_perform() failed: %s\n",
                    curl_easy_strerror(res));
        /* always cleanup */
        curl_easy_cleanup(curl);
        return 0;
    }
}

void parseJson(char *file_name,double *t,char *city , double *tmn, double *tmx,char *w, char *i){
    //parse the file file_name and extract the data for "description", "icon" and "temp
    //and store them in weather, iconId and temp
    FILE *fp = fopen(file_name, "r");
    char buffer[1024];
    char *p, *tm , *tx;
    struct json_object *parsed_json;
    struct json_object *temperature;
    struct json_object *weather;
    struct json_object *icon;
    struct json_object *city_name;
    struct json_object *main;
    struct json_object *temperature_max;
    struct json_object *temperature_min;

    fread(buffer, 1, sizeof(buffer), fp);
    fclose(fp);

    //parse the json
    parsed_json = json_tokener_parse(buffer);
    //get the temp (we first put the inner json string into a json object then we access again the inside of the json object to get the wanted key
    json_object_object_get_ex(parsed_json, "main", &temperature);
    json_object_object_get_ex(parsed_json, "name", &city_name);
    json_object_object_get_ex(temperature, "temp_max", &temperature_max);
    json_object_object_get_ex(temperature, "temp_min", &temperature_min);
    json_object_object_get_ex(temperature, "temp", &temperature);
    json_object_object_get_ex(parsed_json, "weather", &weather);
    weather=json_object_array_get_idx(weather, 0);
    json_object_object_get_ex(weather, "main", &main);
    json_object_object_get_ex(weather, "icon", &icon);

    //convert the json object to string
    strcpy(i, json_object_get_string(icon));
    strcpy(city, json_object_get_string(city_name));
    strcpy(w, json_object_get_string(main));
    // we put inside a temp named p a string then atof to store it in a double
    p = json_object_get_string(temperature);
    *t = atof(p);


    tx = json_object_get_string(temperature_max);
    *tmx = atof(tx);

    tm = json_object_get_string(temperature_min);
    *tmn = atof(tm);
    //for free the memory
    json_object_put(parsed_json);
}



int main(void)
{
    MYSQL *DBConnect= initDb();

    char weatherfilename[20] = "weather.json";

    double temperature, temperature_min, temperature_max;
    char weather[50],icon[50],cityName[50];

    if (curlAPI(weatherfilename) == -1){
        exit(-1);
    }
   parseJson(weatherfilename,&temperature,cityName,&temperature_min,&temperature_max,weather,icon);
    printf("cc");
    printf("\n%f",temperature);
    printf("\n%s",cityName);
    printf("\n%f",temperature_min);
    printf("\n%f",temperature_max);
    printf("\n%s",weather);
    printf("\n%s",icon);

    initPreparedStatements(DBConnect,&temperature,cityName,&temperature_min,&temperature_max,weather,icon);
    return 0;
}
