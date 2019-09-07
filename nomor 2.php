<?php
	 function isAcceptedUsername($username) {
		  return preg_match('/^[aiueo]{3}[a-z]{2,6}$/i',$username) ;
	 }
	 if (isAcceptedUsername("aaat3st1ng")) {
		 echo "Username Is Valid" ;
	 } else {
		 echo "Username Is Invalid" ;
	 }
	 function isAcceptedPassword($password) {
		  return preg_match('/^[!@#$%*AIUEOaiueo]{3}[A-Za-z]{2,6}$/i',$Password) ;
	 }
	 if (isAcceptedPassword("aaat3st1ng")) {
		 echo "Password Is Valid" ;
	 } else {
		 echo "Pssword Is Invalid" ;
	 }
?>