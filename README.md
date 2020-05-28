
Before start, create project in google console than create 'service account' in credentials tab(create and download json file with accesses).
And don`t forget enable GoogleDrive API and GoogleSheets API.

- [revolution/laravel-google-sheets](https://packagist.org/packages/revolution/laravel-google-sheets)
- [google console](https://console.cloud.google.com)

When created google sheet, take sheet id:  
https://docs.google.com/spreadsheets/d/ **-->1dCRKI-KbBkUy_QVt4zA_oXXWul7F1Rk93tvdb24Oo_8<--** /edit#gid=0

Add this in .env:  
`#Google sheet`  
`GOOGLE_SHEET_ID=1dCRKI-KbBLUy_QVa4zA_oVXWul7F1Rk93tvdb34Oo_8`  
`GOOGLE_SHEET_NAME=Лист1`  
`ACCESS_FILE="arched-media-277923-4c215ac5ed98.json"`

