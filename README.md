# Kang-WebSite
ULR is ehdrn3020.dothome.co.kr. You can see desigh and how it works.

By programming the website, I promote myself and Use as a E-diary by adding the functions I need. Using the bootstrap, I designed a reactive web site that can be viewed on any device. 

Structure 
It consists of four main pages. [Home], [Profile], [Reference], [Work]
The code that applies to all pages are	
  -board_con.php : Function for accessing database. 
  -message.php : Use menu bar to store someone contacts on any page and save it to the database.

[Home]
  -Index.html : Explain Kang's web	
  
[Profile]  
  -resume.html : Explain my details.

[Reference]	
  -reference.html	: Bookmarking the site I often visit.
  -reference_in.php : Write a category and press the Add button to save it to the DB.
  -reference_out.php : Bring the Bookmark list from DB and show it to the Web site.
  -reference_del.php : When the Delete button is pressed, the data disappears from the bookmark.
  
[Board]		
  -w_server.html : A page showing a list of notice board. It is implemented by in-line php code.
  -write.html: A page that allows you to add text to the notice board. Press the Write Button. 
  -write_board.php : Add the written data to the DB.

  -look.html : When you click the list, it is a page that shows the contents of the list from DB.
  -look_del.php : Press the Delete button to clear data from DB table.

  -modify.html : A page that allows you to change written text. Press the Modify Button.
  -modify_board.php : The function to update data to the DB table.

[Data Base Table]
  -Reference Table : Store the URL address on the reference page.
  -Board Table : Store the information of Board.
  -Messge Table : Store the message entered in the message box(message.php).
