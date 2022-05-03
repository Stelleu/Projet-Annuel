#include <stdio.h>
#include <mysql/mysql.h>
#include "Struct.h"


int main() {

    MYSQL mysql;
    MYSQL_RES *result;
    MYSQL_ROW row;
    int numrows, numcols, c;
    mysql_init(&mysql);

    /* Establish a database connection */
    if (!mysql_real_connect(&mysql,host,user,dbpassword,dbname, 3306, NULL, 0))
    {
        fprintf(stderr, "Error connecting: Error %d: %s\n", mysql_errno(&mysql), mysql_error(&mysql));
    }

    /* Execute a query */
    char query[] = "INSERT INTO cities(location,name,degree_min,degree_max,weather) VALUES json_query(@json,'$.coord','$.name','$.main.[2]','$.main.[3]','$.weather.[1]',LOAD DATA LOCAL INFILE('weather.json'))";

    if (mysql_query(&mysql, query))
    {
        fprintf(stderr, "Error executing query: Error %d: %s\n",
                mysql_errno(&mysql), mysql_error(&mysql));
    }

    /* Assign the result handle */
    result = mysql_use_result(&mysql);

    if (!result)
    {
        fprintf(stderr, "Error using result: Error %d: %s\n",
                mysql_errno(&mysql), mysql_error(&mysql));
    }

    /* Find the number of columns in the result */
    numcols = mysql_num_fields(result);
    /* Loop through the result set to display it */
    while (row = mysql_fetch_row(result)) {
        for(c=0; c<numcols; c++) {
            printf("%s\t", row[c]);
        }
        printf("\n");
    }
}