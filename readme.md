<div align="center">

# PUP E-Boto
The University elections depends on how the PUP QC COMELEC, Organizations, and The University organized its process and policy. PUP E-BOTO was designed to provide sufficient effect for the elections, contest, and poll that students can participate. The traditional way of voting  which is through paper ballots pushed the researchers to develop an E-Voting site which is the PUP E-BOTO, it is an effective way of handling elections compared to manually or physically attending the elections that involves a bunch of physical contacts to other people, long lines to wait, and prone to anomalies or tampering. Therefore, the researchers come up with the study that addressed this kind of dilemma. 

<br>

# Technology Stack
**- PHP - CodeIgniter**<br>
**- MSSQL**<br>
**- jQuery**<br>
**- Bootstrap**<br>
**- PHP - Mailer**<br>
**- Windows Task Scheduler for automated emails with PHP Script**<br>

</div>

<br><br>

<div align='center'>


</div>



## Installation

## Installation

- Copy all files inside readme/ext folder to your
xampp/php/ext

- Modify your php.ini 
Find extension=pdo_sqlite
Make a new line and add this lines:
extension=php_sqlsrv_74_nts_x64.dll
extension=php_sqlsrv_74_ts_x64.dll

- Run the database script in the folder using ssms.
Version to download
SQL SERVER 2014
https://www.microsoft.com/en-sg/download/confirmation.aspx?id=42299

XAMPP VERSION 7.4.12
https://www.apachefriends.org/download.html

OPTIONAL:
SSMS 2018:
https://docs.microsoft.com/en-us/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-ver15

- If run locally to access the homepag - http://localhost/eboto/

## Login to browse the system
<div>
    <table>
        <thead>
            <tr>
                <th><strong>Student Number</strong></th>
                <th><strong>Password</strong></th>
                <th><strong>Role</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>admin</td>
                <td>admin</td>
                <td>Admin</td>
            </tr>
            <tr>
                <td>2018-00232-CM-0</td>
                <td>admin</td>
                <td>Student</td>
            </tr>
        </tbody>
    </table>
</div>
