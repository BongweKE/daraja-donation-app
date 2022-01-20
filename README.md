# SIMPLE DONATIONS SITE TO TEST DARAJA 2.0(MPESA) API

## MPESA FILES
*donation.php* requires *pay.php* which has the two functions:\
- customerMpesaSTKPush($phone,$amt) is the main function. It takes in customer details then\
  calls the subordinate function to generate a token before actually initializing the\
  transaction. It is setup to work with dummy variables from test/sandbox.
- generateToken() is the subordinate function without which the whole transaction will\
  not be initiated. I learnt this the hard way. 
*success.php* is a dummy and I have not yet generated measures to test for whether the transaction\
has occured. I'm thinking perhaps this is better to test in a commercialized project since there\
is need for some credentialz here and there. 
## OTHER FILES
The rest of the php, html, etc files are dummies and are setup in a shoddy manner strictly for the\
sake of enabling fast tracking to the testing of daraja API.\
the database *oms1.sql* is a good example. 

