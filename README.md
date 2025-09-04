# tablepress-responsive
Makes TablePress tables responsive by converting them into a stacked mobile-friendly layout.

A lightweight WordPress plugin that makes **TablePress tables responsive** by converting them into a **stacked mobile-friendly layout**.  

On small screens, each row of the table is displayed as a block with the column header shown above each cell.  
This improves readability and usability on mobile devices compared to horizontal scrolling.

---

## Features
- ✅ Automatically detects TablePress tables
- ✅ Converts them into a stacked layout on mobile (≤768px)
- ✅ No manual editing required (`data-label` attributes are auto-generated from headers)
- ✅ Lightweight, no external dependencies
- ✅ Works with any TablePress table

---

## Installation

1. **Download or clone this repository**
   
   git clone https://github.com/nikdjem/tablepress-responsive.git


2. **Zip the folder (optional)**
    If uploading manually, zip the folder:
    zip -r tablepress-responsive.zip tablepress-responsive/


3. **Upload to WordPress**

    1.Go to WordPress Admin → Plugins → Add New → Upload Plugin

    2.Upload the tablepress-responsive.zip file

    3.Click Install Now and then Activate

4. **Done!**
    Your TablePress tables are now responsive on mobile.


5. **Example (Mobile View)**

| Name  | Age | Country |
| ----- | --- | ------- |
| John  | 25  | USA     |
| Maria | 30  | Spain   |

becomes on mobile:

Name: John<br>
Age: 25<br>
Country: USA<br>

Name: Maria<br>
Age: 30<br>
Country: Spain<br>


6. **Compatibility**
    Requires WordPress 5.0+
    Requires TablePress plugin
