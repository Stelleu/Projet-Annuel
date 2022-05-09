#include <stdio.h>
#include <mysql/mysql.h>
#include <string.h>
#include <curl/curl.h>
#include "Struct.h"

char *strndup( const char source, size_t size );

MYSQL *initDb(){
    MYSQL *connect;
    connect = mysql_init(NULL);
    if(!(mysql_real_connect(connect,host,user,dbpassword ,dbname,3306, NULL,0))){
        fprintf(stderr,"Error: %s [%d]\n", mysql_error(connect), mysql_errno(connect));
        exit(1);
    }
    printf("\n Connect Succesful !\n");
    stmt = mysql_stmt_init(connect);
    return connect;
}

int insertMeteo(MYSQL *con, char meteo_data){
    char query[200];
    sprintf(query, "INSERT INTO weather VALUES ('%s')", meteo_data);
    if (mysql_query(con, query)){
        finish_with_error(con);
    }
    else
        return 1;
}
/* the function to invoke as the data recieved */
size_t static write_callback_func(voidbuffer,size_t size,size_t nmemb,void userp)
{
    char response_ptr =  (char)userp;

    // assuming the response is a string
response_ptr = strndup(buffer, (size_t)(sizenmemb)); // strndup alloue une nouvelle zone de mémoire via la fonction malloc


}

char returnAPIRequest()
{
    /* keeps the handle to the curl object */
    CURL curl_handle = NULL;
    /* to keep the response*/
    char response = NULL;

    /* initializing curl and setting the url */
    curl_handle = curl_easy_init();
    curl_easy_setopt(curl_handle, CURLOPT_URL," https://api.openweathermap.org/data/2.5/weather?q=Lyon&appid=70d7c9b9968a8752da6284c07884a411&units=metric");
    curl_easy_setopt(curl_handle, CURLOPT_HTTPGET, 1);

    /* follow locations specified by the response header */
    curl_easy_setopt(curl_handle, CURLOPT_FOLLOWLOCATION, 1);

    /*setting a callback function to return the data*/
    curl_easy_setopt(curl_handle, CURLOPT_WRITEFUNCTION, write_callback_func);

    /*passing the pointer to the response as the callback parameter*/
    curl_easy_setopt(curl_handle, CURLOPT_WRITEDATA, &response);

    /*perform the request */
    curl_easy_perform(curl_handle);

    /* cleaning all curl stuff */
    curl_easy_cleanup(curl_handle);

    return response;
}

int main(){
    MYSQL *DBConnect = initDb();
    char response = returnAPIRequest();
    insertMeteo(DBConnect,response);

}