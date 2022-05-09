#include <stdio.h>
#include <curl/curl.h>
#include "ConnectBDD.c"
#include <string.h>

static size_t write_data(void *ptr, size_t size, size_t nmemb, void *stream){
    size_t written = fwrite(ptr, size, nmemb, (FILE *)stream);
    return written; }

int main() {

//    MYSQL mysql;
//    MYSQL_RES *result;
//    MYSQL_ROW row;
//    int numrows, numcols, c;
//    mysql_init(&mysql);
//
//    /* Establish a database connection */
//    if (!mysql_real_connect(&mysql,host,user,dbpassword,dbname, 3306, NULL, 0))
//    {
//        fprintf(stderr, "Error connecting: Error %d: %s\n", mysql_errno(&mysql), mysql_error(&mysql));
//    }
//
//    /* Execute a query */
//    char query[] = "INSERT INTO cities(location,name,degree_min,degree_max,weather) VALUES json_query(@json,'$.coord','$.name','$.main.[2]','$.main.[3]','$.weather.[1]',LOAD DATA LOCAL INFILE('weather.json'))";
//
//    if (mysql_query(&mysql, query))
//    {
//        fprintf(stderr, "Error executing query: Error %d: %s\n",
//                mysql_errno(&mysql), mysql_error(&mysql));
//    }
//
//    /* Assign the result handle */
//    result = mysql_use_result(&mysql);
//
//    if (!result)
//    {
//        fprintf(stderr, "Error using result: Error %d: %s\n",
//                mysql_errno(&mysql), mysql_error(&mysql));
//    }
//
//    /* Find the number of columns in the result */
//    numcols = mysql_num_fields(result);
//    /* Loop through the result set to display it */
//    while (row = mysql_fetch_row(result)) {
//        for(c=0; c<numcols; c++) {
//            printf("%s\t", row[c]);
//        }
//        printf("\n");
//    }
    curl_global_init(CURL_GLOBAL_ALL);
    CURL *curl;
    CURLcode res;
    curl = curl_easy_init();
    MYSQL *DBConnect = initDb();
    char response;
    if(curl) {
        curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_easy_setopt(curl, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather?q=Lyon&appid=70d7c9b9968a8752da6284c07884a411&units=metric");
        /* no progress meter please */
        curl_easy_setopt(curl, CURLOPT_NOPROGRESS, 1L);
        /*stocker les valeurs dans la fonction*/
        curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, write_data);

        /* écriture des données */
        curl_easy_setopt(curl, CURLOPT_WRITEDATA, &response);
        /* Perform the request, res will get the return code */

        res = curl_easy_perform(curl);
        /* Check for errors */
        if(res != CURLE_OK)
            fprintf(stderr, "curl_easy_perform() failed: %s\n",
                    curl_easy_strerror(res));

        /* always cleanup */
        curl_easy_cleanup(curl);
    }
    initPreparedStatements(DBConnect,response);




}