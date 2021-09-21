
Summary + dB's

connect to db code
CORs pemmissions
enpoints to post,retrieve, update and delete

for update and delete endpoints
- endpoints with ID's to be implemented so as to identify the data to be removed or updated
-same applies to getting or retrieving

----------------------------------------Mysql--------------------------------------------------------
DB layout(Mysql)- Relational
In this case since many posts can be from one author there is no need to write the author each 
and every time he posts, therefore the table is normalised as follows to reduce redundancy
So here the author is added once and his ID is to be used as the foreign key in the posts table
Also since a single post can also have many comments therefore there is no need to 
keep on writing the author's details and the original post in the DB, therefore another table called
replies can be create which can store comments have authors' ID and the posts' Id, this way
the data integrity will be improved.
DB name ----mydb
tables  ----author,posts, replies

table (author)
ID (primary key)
name (VarChar 100)
surname (VarChar 100)
title ( VarChar 5)

table (posts)
ID (primary key)
authorID (this one is a foreign key from the table-author)
text (VarChar 100)
date (Date)
etc (VarChar/int/ Char/etc )

table(replies)
ID (primary)
authorID (foreign key pointing to the author's table)
postID(foreign key pointing to the posts table)
comment(VarChar 100)
date (Date)
-------------------------------------------Mongoose---------------------------------------------------------------
The below  can be used the mongoose schema 

 mongoose.Schema({
     author//
     post//
     date
     comments
     dateComment
});
 There is no need to state ID since here the ID is generated automatically,

