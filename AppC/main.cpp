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
/*
struct json_object *parsed_json;
//struct json_object *main;
struct json_object *description;
struct json_object *weather;
struct json_object  *icon;
struct json_object  *temp;
struct json_object *feels_like;
struct json_object *temp_min;
struct json_object *temp_max;
struct json_object  *pressure;
struct json_object  *humidity;
struct json_object  *wind;
struct json_object *name;
*/
//long  readJson(const char *fileName){
////    long size;
////    char buffer[1024];
////    FILE *fp =fopen(fileName,"rb");
////    fseek(fileName,0,SEEK_END);
////    size = ftell(fp);
////    fread(buffer, sizeof (char), size, fp);
////    fclose(fp);
////    return(size);
////}

int main(void)
{
    MYSQL *DBConnect = initDb();
    const char *weatherfilename = "weather.json";
    FILE *weatherfile;
/*    curl_global_init(CURL_GLOBAL_ALL);
    CURL *curl;
    CURLcode res;
    curl = curl_easy_init();
    if(curl) {
        curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_easy_setopt(curl, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather?q=Lyon&appid=70d7c9b9968a8752da6284c07884a411&units=metric");
        *//* no progress meter please *//*
        curl_easy_setopt(curl, CURLOPT_NOPROGRESS, 1L);
        *//*stocker les valeurs dans la fonction*//*
        curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, write_data);

        *//*ouverture du fichier*//*
        weatherfile = fopen(weatherfilename, "a+");
        if(!weatherfile){
            curl_easy_cleanup(curl);
            return -1;
        }
        *//* écriture des données *//*
        curl_easy_setopt(curl, CURLOPT_WRITEDATA, weatherfile);
        *//* Perform the request, res will get the return code *//*

        res = curl_easy_perform(curl);
        fclose(weatherfile);
        *//* Check for errors *//*
        if(res != CURLE_OK)
            fprintf(stderr, "curl_easy_perform() failed: %s\n",
                    curl_easy_strerror(res));

        *//* always cleanup *//*
        curl_easy_cleanup(curl);
    }*/
//    printf("Le fichier à bien été crée!\n");

    /*On réouvre le fichier afin d'y écrire le set */
//    long size;
    curl_global_init(CURL_GLOBAL_ALL);
    CURL *curl;
    CURLcode res;
    curl = curl_easy_init();
    if(curl) {
        curl_easy_setopt(curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_easy_setopt(curl, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather?q=Lyon&appid=70d7c9b9968a8752da6284c07884a411&units=metric");
        /* no progress meter please */
        curl_easy_setopt(curl, CURLOPT_NOPROGRESS, 1L);
        /*stocker les valeurs dans la fonction*/
        curl_easy_setopt(curl, CURLOPT_WRITEFUNCTION, write_data);
    FILE *fp =fopen(weatherfilename,"w");
    if (fp == NULL) return 1;


//    fputs("SET @json='",fp);

        /*ouverture du fichier*/
        weatherfile = fopen(weatherfilename, "a+");
        if(!weatherfile){
            curl_easy_cleanup(curl);
            return -1;
        }
        /* écriture des données */
//        curl_easy_setopt(curl, CURLOPT_WRITEDATA, weatherfile);
//        /* Perform the request, res will get the return code */
//
//        res = curl_easy_perform(curl);
//        fputs("'",fp);
//        fclose(fp);
//        /* Check for errors */
//        if(res != CURLE_OK)
//            fprintf(stderr, "curl_easy_perform() failed: %s\n",
//                    curl_easy_strerror(res));
//
//        /* always cleanup */
//        curl_easy_cleanup(curl);
//    }



//    fseek(fp,0,SEEK_END);
//    size = ftell(fp);
//    fread(buffer,1024, 1, fp);

//    fclose(fp);

    return 0;
}
