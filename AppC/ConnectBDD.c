//
// Created by estel on 24/04/2022.
//
#include <mysql/mysql.h>
#include <stddef.h>
#include <stdio.h>
#include <string.h>
#include "Struct.h"

//OPERATION BDD
MYSQL_STMT    *stmt ;/*INSERT USER*/
MYSQL_STMT    *stmtInsertJSON ;
MYSQL_DATA      is_null;

/*INITIALISATION BDD*/

MYSQL *initDb(){
    printf("cc");
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

/*INIT PREPARED STATEMENTS*/

void initPreparedStatements(MYSQL*connect,double *t,char *city , double *tmn, double *tmx,char *w, char *i) {

    unsigned long  param_count ;

    stmt = mysql_stmt_init(connect);
    if (!stmt) {
        fprintf(stderr, " mysql_stmt_init(), out of memory\n");
        exit(0);
    }

    stmtInsertJSON = mysql_stmt_init(connect);
    if (mysql_stmt_prepare(stmtInsertJSON, INSERT_JSON,(strlen(INSERT_JSON)))){
        fprintf(stderr, " mysql_stmt_prepare(), INSERT failed\n");
        fprintf(stderr, " %s\n", mysql_stmt_error(stmtInsertJSON));
        exit(0);

    }param_count = mysql_stmt_param_count(stmtInsertJSON);
    printf("there are %ld parameters in the insert statements\n", param_count);
    //(,,tmn,,w,i)
    MYSQL_BIND    bind[6];


    //BIND lier les valeurs de données de paramètre aux tampons
    bind[0].buffer_type= MYSQL_TYPE_DOUBLE;
    bind[0].buffer= (double *)t;
    bind[0].is_null= 0;
    bind[0].length= 0;
/* STRING PARAM
    bind[1].buffer_type= MYSQL_TYPE_STRING;
    bind[1].buffer= (char *)city;
    bind[1].buffer_length= strlen(city);
    bind[1].is_null= 0;
    bind[1].length= &city;
    */

    bind[1].buffer_type= MYSQL_TYPE_DOUBLE;
    bind[1].buffer= (double *)tmn;
    bind[1].is_null= &is_null;
    bind[1].length= 0;

    bind[2].buffer_type= MYSQL_TYPE_DOUBLE;
    bind[2].buffer= (double *)tmx;
    bind[2].is_null= &is_null;
    bind[2].length= 0;

///* STRING PARAM */
//    bind[3].buffer_type= MYSQL_TYPE_STRING;
//    bind[3].buffer= (char *)w;
//    bind[3].buffer_length= strlen(w);
//    bind[3].is_null= 0;
//    bind[3].length= &w;
////
    /* STRING PARAM */
    bind[3].buffer_type= MYSQL_TYPE_STRING;
    bind[3].buffer= (char *)i;
    bind[3].buffer_length= strlen(i);
    bind[3].is_null= 0;
    bind[3].length= &i;


    if (mysql_stmt_bind_param(stmtInsertJSON, bind))
    {
        fprintf(stderr, " mysql_stmt_bind_param() failed\n");
        fprintf(stderr, " %s\n", mysql_stmt_error(stmtInsertJSON));
        exit(0);
    }

/* Execute the INSERT statement - 2*/
    if (mysql_stmt_execute(stmtInsertJSON)) {
        fprintf(stderr, " mysql_stmt_execute, 2 failed\n");
        fprintf(stderr, " %s\n", mysql_stmt_error(stmtInsertJSON));
        exit(0);
    }

}


