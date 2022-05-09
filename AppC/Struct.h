//
// Created by estel on 24/04/2022.
//

#ifndef APPC_STRUCT_H
#define APPC_STRUCT_H

//#define INSERT_JSON "INSERT INTO cities(location,name,degree_min,degree_max,weather) VALUES (JSON_VALUES(@json,'$.coord','$.name','$.main.temp_min','$.main.temp_max','$.weather.main')) FROM SELECT LOAD_FILE('weather.json')"
#define INSERT_JSON "INSERT INTO cities(location,name,degree_min,degree_max,weather) VALUES('JSON '{'name': 'Alice', 'age': 30}'','JSON '{'name': 'Alice', 'age': 30}'','JSON '{'name': 'Alice', 'age': 30}'')"
#define SELECT FILE "INSERT INTO qcm(name)  VALUES(?)"

#define host "185.166.188.1"
#define user "u486471496_admeasyscooter"
#define dbpassword "3HsbMJXtF7rLGfaq"
#define dbname "u486471496_easyscooter"
#endif //APPC_STRUCT_H
