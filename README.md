# AKINGOS-PHP-STEEM-ACCESS-TOOLS

**Name:** Akingos Steem Access Tool<br/>
**Contributors:** akintunde {github}<br/>
**Programmed with:** PHP<br/>
**Requires at least:** php 5.6 <br/>
**Major Dependencies:** Steemjs API , Coinmarketcap API, Websocket PHP  & PHPUnit_Framework<br/>
**License:** APACHE LICENSE <br/>
**License URI:** https://www.apache.org/licenses/LICENSE-2.0 <br/>
**APP Address:** steem.akin.com.ng <br/>

## Short Summary:
This script act as an alternative profile for steem blockchain users as it shows certain details that are not present on the steemit profile page.

## Description:
This script displays your user rank (minnow, orca, whale and so on), It shows prices of sbd, steem and even bitcoin at a real time of less than 1 second. It also shows the number of witnesses you have voted for and much more. <br/>

It also displays the number of users on the steem blockchain, together with a list of active witnesses.

Below is a preview:
![Preview](http://steem.akin.com.ng/s.PNG)


## How it works:
The script has a welcoming index page that contains certain details like the price tickers for sbd, steem and btc and a link that leads to *u.php* where users can fill a form with their username (without the @ symbol), it then leads the to user.php, where all the user details are displayed by using the steemjs javascript api calls.

Users can also directly use the profile fancy url feature by using this format (steem.com.ng/username) or (steem.com.ng/username). This is being handled by the htaccess.

The htaccess codes locks the index to index.html, so other index pages with other extensions will not act as index unless the htaccess is edited.

The htaccess also helps tell the server to process all html files as php files.

All php dependencies are stored in the src/ folder while the rest of the dependencies can be found in the css and js folders.

The /tests folder is for testing the php classes that act as a layer between the steemjs api and php, more reason why I had to use websocket php.




## Installation 
Installation is very easy. Just follow the following steps

1. Download this script as a zip file (from [here](https://github.com/Akintunde102/AKINGOS-PHP-STEEM-ACCESS-TOOLS-/archive/master.zip))
2. Copy to your server  www (or htdocs) folder
3. That's it 
4. Just view from your server domain name (or from localhost if you are in a local environment)


## Changelog
 1.0

## Initial Version

## Contact Me
**Discord**: @akintunde <br/>
**Email:** jegedeakintunde[at]gmail.com<br/>
**utopian.io:** @akintunde <br/>
**github:** @akintunde102<br/>


## More ScreenShots
![Preview](http://steem.akin.com.ng/1.PNG)
![Preview](http://steem.akin.com.ng/2.PNG)
 

