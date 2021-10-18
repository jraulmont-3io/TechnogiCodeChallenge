for(let i=1; i<=100; i++){
   let pr = ""
   if(i%3==0){
      pr+="fizz"
   }
   if(i%5==0){
      pr+="buzz"
   }
   console.log(i+": "+pr)
}