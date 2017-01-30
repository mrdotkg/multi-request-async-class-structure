# multi-request-async-class-structure

##Objective: 
To ask for current status in XML format to all the wireless machines installed (listed on cloud) per second through php classes with handling the case of eror in device.

##Challenges: 
1. The script should be able to run in background to get the data per second withput adding any bandwith or server load.
2. Mode of communication to the machines.
3. To make request for current status to all the devices asynchronous with a callback function.

##Tricks / Assumptions: 
1. CRON Jobs at server can take care of running the php script every second in the background doing needful manipulations.(explanation out of the scope here but can provide if required.)  
2. Assumed that curl request would be the right way of communicationg to all the machines installed via machine_address.
3. CURL's ability to send multiple asynchronous requests with callback functions came handy here. 

##Structure 
#### The app directory contains all the executable scripts with required classes.    
* The flow of the module can be tested by running index.php included which logs all the major modules, the control flows through. 
* All the classes are written with proper PHPdoc blocks commenting and extra details which makes it very easy to understand what each classes are meant for and what theie methods are capable of once we go through them.
* Tasks out of the scope of this assignment have been commented under TODOs. 
* Tried my best while explaining each of them, if anything left unclear please point out to me grv.rkg@gmail.com.
