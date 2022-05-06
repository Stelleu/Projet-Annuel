//
// Created by estel on 24/04/2022.
//
#include <mysql/mysql.h>
#include <stddef.h>
#include <stdio.h>
#include <string.h>


#include "struct.h"

//OPERATION BDD
MYSQL_STMT    *stmt ;/*INSERT USER*/
MYSQL_STMT    *stmtInsertJSON ;
MYSQL_STMT    *stmtInsertQCMSubject;
MYSQL_STMT    *stmtInsertQCMQuestions;
MYSQL_STMT    *stmtInsertQCMAnswer;
MYSQL_STMT    *stmtUpdatePWD;


//void initPreparedStatements(MYSQL*connect);

/*INITIALISATION BDD*/

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

/*INIT PREPARED STATEMENTS*/

void initPreparedStatements(MYSQL*connect,char meteo_data) {

    unsigned long  param_count ;

    stmt = mysql_stmt_init(connect);
    if (!stmt) {
        fprintf(stderr, " mysql_stmt_init(), out of memory\n");
        exit(0);
    }

    stmtInsertJSON = mysql_stmt_init(connect);
    if (mysql_stmt_prepare(stmt, "INSERT INTO cities VALUES ('%s')", meteo_data)){
        fprintf(stderr, " mysql_stmt_prepare(), INSERT failed\n");
        fprintf(stderr, " %s\n", mysql_stmt_error(stmtInsertJSON));
        exit(0);
    }param_count = mysql_stmt_param_count(stmtInsertJSON);
    printf("there are %ld parameters in the insert statements\n", param_count);



  /*  stmtInsertQCMAnswer = mysql_stmt_init(connect);
    if (mysql_stmt_prepare(stmtInsertQCMAnswer, INSERT_QCM_ANSWER,strlen(INSERT_QCM_ANSWER))){
        fprintf(stderr, " mysql_stmt_prepare(), INSERT failed\n");
        fprintf(stderr, " %s\n", mysql_stmt_error(stmtInsertQCMAnswer));
        exit(0);
    }param_count_anwser = mysql_stmt_param_count(stmtInsertQCMAnswer);
    printf("there are %ld parameters in the insert statements\n", param_count_anwser);
*/

}


