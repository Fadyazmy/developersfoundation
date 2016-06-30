## Centralized Link Referencing

This is very useful in cases where you have multiple articles on your website or different versions of a single webpage. 
Normally you would use multiple html files for the above cases, but with CMS, you can condense them into a single php file. 

To start, convert your html file to a php file.

### Example

Let's say your file is called test.php

Main portion of test.php:

```
$linkTo = $_GET['page'];

switch ($linkTo) {
    case 1:
        echo "<div>page 1</div>";
        break;
    case 2:
        echo "<div>page 2</div>";
        break;
    case 3:
        echo "<div>page 3</div>";
        break;
    default:
        echo "<div>default page</div>";
}
```

To link to page 1, use the link: test.php?page=1

To get the default page, use the link: test.php?page=0

See the main.php for the full syntax.