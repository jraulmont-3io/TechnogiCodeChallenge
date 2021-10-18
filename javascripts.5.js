/**
* Returns the header element.
*
* @return {(object|null)} The JQuery header element or null if the element does not exist
*/
function getHeaderElement() {
   // Get header element by its id.    
   header = $("#myHeader"); //Added # to indicate to get an element by id
   if (header === null
      && typeof header === "undefined" //Change keyword TypeOf to typeof and compare agains string
   ) {
      console.log('header element exists!');//Change the last " to '
   }
   console.log(`
      header element does not exist!
              `)) //changed the " to ` which allows multiple lines
   return header
}
