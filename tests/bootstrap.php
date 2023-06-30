<?php
ini_set('display_errors',1);            //错误信息
ini_set('display_startup_errors',1);    //php启动错误信息
error_reporting(-1);                    //打印出所有的 错误信息


require_once __DIR__ . '/../vendor/autoload.php';

try {
    $jobName = '/job/test/job/build2';
    $jenkins = new \JenkinsKhan\Jenkins('http://192.168.3.50:8080', 'admin', '2af6c62dcaa542e3b2b1ca0b9970b301');
    $jenkins->enableCrumbs();
    $build = $jenkins->launchJobAndWaitUntilFinished($jobName, ['GIT_REPO' => 'hashdb', "GIT_BRANCH_OR_TAG"=>"hr50"]);
    print_r($jenkins->getConsoleTextBuild($jobName, $build->getNumber()));


    $jobName = '/job/test/job/test222';
    $build = $jenkins->launchJobAndWaitUntilFinished($jobName, []);
    print_r($jenkins->getConsoleTextBuild($jobName, $build->getNumber()));
} catch (Exception $exception){
    print_r($exception);
}
