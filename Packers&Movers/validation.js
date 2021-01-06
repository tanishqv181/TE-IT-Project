function world(){

  let name = document.getElementById("name");
  let email = document.getElementById("email");
  let phone_no = document.getElementById("phone_no");
  let from_city = document.getElementById("from_city");
  let to_city = document.getElementById("to_city");
  let from_address = document.getElementById("from_address");
  let to_address = document.getElementById("to_address");
  let shipping_date = document.getElementById("shipping_date");
  let w_d_s = document.getElementById("w_d_s");
  let all_items = document.getElementById("all_items");

  let valname = document.getElementById("name").value;
  let valemail = document.getElementById("email").value;
  let valphone_no = document.getElementById("phone_no").value;
  let valfrom_city = document.getElementById("from_city").value;
  let valto_city = document.getElementById("to_city").value;
  let valfrom_address = document.getElementById("from_address").value;
  let valto_address = document.getElementById("to_address").value;
  let valshipping_date = document.getElementById("shipping_date").value;
  let valw_d_s = document.getElementById("w_d_s").value;
  let valall_items = document.getElementById("all_items").value;

  let testemail = /^([a-z A-Z 0-9 \.-]+)@([a-z A-Z 0-9 -]{2,20}).([a-z]{2,15}).([a-z]{2,4})?$/;
  let testphone = /^([0-9]{10,12})?$/;

if(valname == ""){
  name.style.backgroundColor = "rgb(224,87,87)";
  name.placeholder = "Please fill this section";
return false;
}

if(valemail == ""){
  email.style.backgroundColor = "rgb(224,87,87)";
  email.placeholder = "Please fill this section";
return false;
}
else if (!testemail.test(valemail)) {
  email.style.backgroundColor = "rgb(224,87,87)";
  email.placeholder = "Enter Valid email";
return false;
}

if(valphone_no == ""){
  phone_no.style.backgroundColor = "rgb(224,87,87)";
  phone_no.placeholder = "Please fill this section";
  return false;
}

if(valfrom_city == ""){
  from_city.style.backgroundColor = "rgb(224,87,87)";
  from_city.placeholder = "Please fill this section";
  return false;
}
if(valto_city == ""){
  to_city.style.backgroundColor = "rgb(224,87,87)";
  to_city.placeholder = "Please fill this section";
  return false;
}
if(valfrom_address == ""){
  from_address.style.backgroundColor = "rgb(224,87,87)";
  from_address.placeholder = "Please fill this section";
  return false;
}
if(valto_address == ""){
  to_address.style.backgroundColor = "rgb(224,87,87)";
  to_address.placeholder = "Please fill this section";
  return false;
}
if(valshipping_date == ""){
  shipping_date.style.backgroundColor = "rgb(224,87,87)";

  return false;
}
if(valw_d_s == ""){
  w_d_s.style.backgroundColor = "rgb(224,87,87)";
  w_d_s.placeholder = "Please fill this section";
  return false;
}
if(valall_items == ""){
  all_items.style.backgroundColor = "rgb(224,87,87)";
  all_items.placeholder = "Please fill this section";
  return false;
}

}
