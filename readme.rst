###################
What is E-BOTO
###################

The University elections depends on how the PUP QC COMELEC, Organizations, and The University organized its process and policy. PUP E-BOTO was designed to provide sufficient effect for the elections, contest, and poll that students can participate. The traditional way of voting  which is through paper ballots pushed the researchers to develop an E-Voting site which is the PUP E-BOTO, it is an effective way of handling elections compared to manually or physically attending the elections that involves a bunch of physical contacts to other people, long lines to wait, and prone to anomalies or tampering. Therefore, the researchers come up with the study that addressed this kind of dilemma. 

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

1. Copy all files inside readme/ext folder to your
xampp/php/ext

2. Modify your php.ini 
Find extension=pdo_sqlite
Make a new line and add this lines:
extension=php_sqlsrv_74_nts_x64.dll
extension=php_sqlsrv_74_ts_x64.dll

3. Run the database script in the folder using ssms.

Version to download
SQL SERVER 2014
https://www.microsoft.com/en-sg/download/confirmation.aspx?id=42299

XAMPP VERSION 7.4.12
https://www.apachefriends.org/download.html

OPTIONAL:
SSMS 2018:
https://docs.microsoft.com/en-us/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-ver15

