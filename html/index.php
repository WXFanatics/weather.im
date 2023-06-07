<?php 
require_once "../config/settings.inc.php";
require_once "../include/myview.php";

$t = new MyView();
$t->content = <<<EOF
<h3>Weather.IM</h3>

<p>This website is a testbed of weather dissemination technologies powered
by the Iowa Environmental Mesonet of Iowa State University.  These products
and services are provided without warranty.

<ul>
 <li><a href="/iembot/">IEMBot Monitor</a></li>
 <li><a href="/live/">Live Client</a>  This is an upstream version of the
 <a href="https://nwschat.weather.gov/live/">NWSChat Live</a> client. This 
 client interfaces with the XMPP server hosted at weather.im and open to
 public usage.</li>
 <li><a href="https://mesonet.agron.iastate.edu/projects/iembot/">IEMBot Project Page</a></li>
</ul>

<h4>News and Notes</h4>

<ul>
<li><strong>7 June 2023</strong>: As a part of the <a href="https://mesonet.agron.iastate.edu/onsite/news.phtml?id=1446">IEM Webfarm Move</a>,
the public IP address of this service has changed.  XMPP clients will need to understand
DNS SRV records to connect to the chat server.  You can hard code the connect host
to <code>129.186.185.33</code>, if necessary.</li>
 <li><strong>16 April 2021</strong>: The WFO-centric chatrooms on the
 weather.im server are all read-only due to incessant spam and bad
 behaviour.</li>
</ul>

EOF;
$t->render('single.phtml');
