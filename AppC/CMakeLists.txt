cmake_minimum_required(VERSION 3.16)
project(AppC C)

set(CMAKE_C_STANDARD 99)
set(libcurl_INCLUDE_DIR "C:/curl/include")
include_directories(${libcurl_INCLUDE_DIR})
add_executable(AppC main.c curlweather.c main.cpp Struct.h ConnectBDD.c)
target_link_libraries(AppC curl)
find_path(JSON_INCLUDE_DIR NAMES json-c/json.h json/json.h)
find_library(JSON_LIBRARY NAMES json-c json)

include(FindPackageHandleStandardArgs)
find_package_handle_standard_args(JSON DEFAULT_MSG
        JSON_LIBRARY
        JSON_INCLUDE_DIR
        )

if(JSON_FOUND)
    set(JSON_LIBRARIES ${JSON_LIBRARY})
    # hack to get old and new layout working:
    set(JSON_INCLUDE_DIRS ${JSON_INCLUDE_DIR}/json-c
            ${JSON_INCLUDE_DIR}/json)
endif()

mark_as_advanced(
        JSON_LIBRARY
        JSON_INCLUDE_DIR
)