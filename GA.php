<?php
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
$analytics = initializeAnalytics();
$profile = getFirstProfileId($analytics);
$results = getResults($analytics, $profile);
printResults($results);
function initializeAnalytics()
{
    // Creates and returns the Analytics Reporting service object.
    // Use the devel8opers console and download your service account
    // credentials in JSON format. Place them in this directory or
    // change the key file location if necessary.
    $KEY_FILE_LOCATION = __DIR__ . '/vendor/service-account-credentials.json';

    // Create and configure a new client object.
    $client = new Google_Client();
    $client->setApplicationName("Hello Analytics Reporting");
    $client->setAuthConfig($KEY_FILE_LOCATION);
    $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
    $analytics = new Google_Service_Analytics($client);

    return $analytics;
}
function getFirstProfileId($analytics) {
    // Get the user's first view (profile) ID.

    // Get the list of accounts for the authorized user.
    $accounts = $analytics->management_accounts->listManagementAccounts();

    if (count($accounts->getItems()) > 0) {
        $items = $accounts->getItems();
        $firstAccountId = $items[0]->getId();

        // Get the list of properties for the authorized user.
        $properties = $analytics->management_webproperties
            ->listManagementWebproperties($firstAccountId);

        if (count($properties->getItems()) > 0) {
            $items = $properties->getItems();
            $firstPropertyId = $items[0]->getId();
            // Get the list of views (profiles) for the authorized user.
            $profiles = $analytics->management_profiles
                ->listManagementProfiles($firstAccountId, $firstPropertyId);

            if (count($profiles->getItems()) > 0) {
                $items = $profiles->getItems();

                // Return the first view (profile) ID.
                return $items[0]->getId();

            } else {
                throw new Exception('No views (profiles) found for this user.');
            }
        } else {
            throw new Exception('No properties found for this user.');
        }
    } else {
        throw new Exception('No accounts found for this user.');
    }
}
function getResults($analytics, $profileId) {
    // Calls the Core Reporting API and queries for the number of sessions
    // for the last seven days.
    return $analytics->data_ga->get(
        'ga:' . $profileId,
        '7daysAgo',
        'today',
        'ga:sessions');
}
function printResults($results) {
    // Parses the response from the Core Reporting API and prints
    // the profile name and total sessions.
    if (count($results->getRows()) > 0) {
        // Get the profile name.
        $profileName = $results->getProfileInfo()->getProfileName();
        // Get the entry for the first entry in the first row.
        $rows = $results->getRows();
        $sessions = $rows[0][0];

        // Print the results.
        print "First view (profile) found: $profileName\n";
        print "Total sessions: $sessions\n";
    } else {
        print "No results found.\n";
    }
}
//$analytics = initializeAnalytics();
//$response = getReport($analytics);
//printResults($response);
//var_dump($response);
//
// * Initializes an Analytics Reporting API V4 service object.
// *
// * @return An authorized Analytics Reporting API V4 service object.
// */
//function initializeAnalytics()
//{
//
//    // Use the developers console and download your service account
//    // credentials in JSON format. Place them in this directory or
//    // change the key file location if necessary.
//    $KEY_FILE_LOCATION = __DIR__ . '/vendor/service-account-credentials.json';
//
//    // Create and configure a new client object.
//    $client = new Google_Client();
//    $client->setApplicationName("Hello Analytics Reporting");
//    $client->setAuthConfig($KEY_FILE_LOCATION);
//    $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
//    $analytics = new Google_Service_AnalyticsReporting($client);
//
//    return $analytics;
//}
//
//
///**
// * Queries the Analytics Reporting API V4.
// *
// * @param service An authorized Analytics Reporting API V4 service object.
// * @return The Analytics Reporting API V4 response.
// */
//function getReport($analytics) {
//
//    // Replace with your view ID, for example XXXX.
//    $VIEW_ID = "266629194";
//
//    // Create the DateRange object.
//    $dateRange = new Google_Service_AnalyticsReporting_DateRange();
//    $dateRange->setStartDate("7daysAgo");
//    $dateRange->setEndDate("today");
//
//    // Create the Metrics object.
//    $sessions = new Google_Service_AnalyticsReporting_Metric();
//    $sessions->setExpression("ga:sessions");
//    $sessions->setAlias("sessions");
//
//    // Create the ReportRequest object.
//    $request = new Google_Service_AnalyticsReporting_ReportRequest();
//    $request->setViewId($VIEW_ID);
//    $request->setDateRanges($dateRange);
//    $request->setMetrics(array($sessions));
//
//    $body = new Google_Service_AnalyticsReporting_GetReportsRequest();
//    $body->setReportRequests( array( $request) );
//    return $analytics->reports->batchGet( $body );
//}
//
//
///**
// * Parses and prints the Analytics Reporting API V4 response.
// *
// * @param An Analytics Reporting API V4 response.
// */
//function printResults($reports) {
//    for ( $reportIndex = 0; $reportIndex < count( $reports ); $reportIndex++ ) {
//        $report = $reports[ $reportIndex ];
//        $header = $report->getColumnHeader();
//        $dimensionHeaders = $header->getDimensions();
//        $metricHeaders = $header->getMetricHeader()->getMetricHeaderEntries();
//        $rows = $report->getData()->getRows();
//
//        for ( $rowIndex = 0; $rowIndex < count($rows); $rowIndex++) {
//            $row = $rows[ $rowIndex ];
//            $dimensions = $row->getDimensions();
//            $metrics = $row->getMetrics();
//            for ($i = 0; $i < count($dimensionHeaders) && $i < count($dimensions); $i++) {
//                print($dimensionHeaders[$i] . ": " . $dimensions[$i] . "\n");
//            }
//
//            for ($j = 0; $j < count($metrics); $j++) {
//                $values = $metrics[$j]->getValues();
//                for ($k = 0; $k < count($values); $k++) {
//                    $entry = $metricHeaders[$k];
//                    print($entry->getName() . ": " . $values[$k] . "\n");
//                }
//            }
//        }
//    }
//}
