$(document).ready(function() {var formatter = new CucumberHTML.DOMFormatter($('.cucumber-report'));formatter.uri("LogIn_Test.feature");
formatter.feature({
  "line": 1,
  "name": "Login Action",
  "description": "",
  "id": "login-action",
  "keyword": "Feature"
});
formatter.scenario({
  "line": 3,
  "name": "Successful Login with Valid Credentials",
  "description": "",
  "id": "login-action;successful-login-with-valid-credentials",
  "type": "scenario",
  "keyword": "Scenario"
});
formatter.step({
  "line": 4,
  "name": "User is on Home Page",
  "keyword": "Given "
});
formatter.step({
  "line": 5,
  "name": "User Navigate to LogIn Page",
  "keyword": "When "
});
formatter.step({
  "line": 6,
  "name": "User enters UserName and Password",
  "keyword": "And "
});
formatter.step({
  "line": 7,
  "name": "Message displayed Login Successfully",
  "keyword": "Then "
});
formatter.match({
  "location": "Test_Steps.user_is_on_Home_Page()"
});
formatter.result({
  "duration": 9234653752,
  "status": "passed"
});
formatter.match({
  "location": "Test_Steps.user_Navigate_to_LogIn_Page()"
});
formatter.result({
  "duration": 2353988224,
  "status": "passed"
});
formatter.match({
  "location": "Test_Steps.user_enters_UserName_and_Password()"
});
formatter.result({
  "duration": 375562330,
  "status": "passed"
});
formatter.match({
  "location": "Test_Steps.message_displayed_Login_Successfully()"
});
formatter.result({
  "duration": 140232,
  "status": "passed"
});
formatter.scenario({
  "line": 9,
  "name": "Successful LogOut",
  "description": "",
  "id": "login-action;successful-logout",
  "type": "scenario",
  "keyword": "Scenario"
});
formatter.step({
  "line": 10,
  "name": "User LogOut from the Application",
  "keyword": "When "
});
formatter.step({
  "line": 11,
  "name": "Message displayed LogOut Successfully",
  "keyword": "Then "
});
formatter.match({
  "location": "Test_Steps.user_LogOut_from_the_Application()"
});
formatter.result({
  "duration": 1727677420,
  "error_message": "org.openqa.selenium.NoSuchElementException: no such element: Unable to locate element: {\"method\":\"xpath\",\"selector\":\".//*[@id\u003d\u0027account_logout\u0027]/a\"}\n  (Session info: chrome\u003d56.0.2924.87)\n  (Driver info: chromedriver\u003d2.27.440174 (e97a722caafc2d3a8b807ee115bfb307f7d2cfd9),platform\u003dMac OS X 10.12.0 x86_64) (WARNING: The server did not provide any stacktrace information)\nCommand duration or timeout: 40 milliseconds\nFor documentation on this error, please visit: http://seleniumhq.org/exceptions/no_such_element.html\nBuild info: version: \u00272.40.0\u0027, revision: \u0027fbe29a9\u0027, time: \u00272014-02-19 20:55:11\u0027\nSystem info: host: \u0027Sarmas-MacBook-Pro.local\u0027, ip: \u0027192.168.1.3\u0027, os.name: \u0027Mac OS X\u0027, os.arch: \u0027x86_64\u0027, os.version: \u002710.12\u0027, java.version: \u00271.8.0_101\u0027\nDriver info: org.openqa.selenium.chrome.ChromeDriver\nCapabilities [{applicationCacheEnabled\u003dfalse, rotatable\u003dfalse, mobileEmulationEnabled\u003dfalse, networkConnectionEnabled\u003dfalse, chrome\u003d{chromedriverVersion\u003d2.27.440174 (e97a722caafc2d3a8b807ee115bfb307f7d2cfd9), userDataDir\u003d/var/folders/s6/7lzqjc2x7td_d34zy7l2wlvh0000gn/T/.org.chromium.Chromium.SwiWz0}, takesHeapSnapshot\u003dtrue, pageLoadStrategy\u003dnormal, databaseEnabled\u003dfalse, handlesAlerts\u003dtrue, hasTouchScreen\u003dfalse, version\u003d56.0.2924.87, platform\u003dMAC, browserConnectionEnabled\u003dfalse, nativeEvents\u003dtrue, acceptSslCerts\u003dtrue, locationContextEnabled\u003dtrue, webStorageEnabled\u003dtrue, browserName\u003dchrome, takesScreenshot\u003dtrue, javascriptEnabled\u003dtrue, cssSelectorsEnabled\u003dtrue, unexpectedAlertBehaviour\u003d}]\nSession ID: 81cf8f60c0950d38086328dc5c016e0f\n\tat sun.reflect.NativeConstructorAccessorImpl.newInstance0(Native Method)\n\tat sun.reflect.NativeConstructorAccessorImpl.newInstance(NativeConstructorAccessorImpl.java:62)\n\tat sun.reflect.DelegatingConstructorAccessorImpl.newInstance(DelegatingConstructorAccessorImpl.java:45)\n\tat java.lang.reflect.Constructor.newInstance(Constructor.java:423)\n\tat org.openqa.selenium.remote.ErrorHandler.createThrowable(ErrorHandler.java:193)\n\tat org.openqa.selenium.remote.ErrorHandler.throwIfResponseFailed(ErrorHandler.java:145)\n\tat org.openqa.selenium.remote.RemoteWebDriver.execute(RemoteWebDriver.java:573)\n\tat org.openqa.selenium.remote.RemoteWebDriver.findElement(RemoteWebDriver.java:326)\n\tat org.openqa.selenium.remote.RemoteWebDriver.findElementByXPath(RemoteWebDriver.java:423)\n\tat org.openqa.selenium.By$ByXPath.findElement(By.java:357)\n\tat org.openqa.selenium.remote.RemoteWebDriver.findElement(RemoteWebDriver.java:318)\n\tat stepDefinition.Test_Steps.user_LogOut_from_the_Application(Test_Steps.java:55)\n\tat ✽.When User LogOut from the Application(LogIn_Test.feature:10)\n",
  "status": "failed"
});
formatter.match({
  "location": "Test_Steps.message_displayed_LogOut_Successfully()"
});
formatter.result({
  "status": "skipped"
});
});