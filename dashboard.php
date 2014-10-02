<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.iframe-noc{			
			clear: both;
			display: block;
			margin: 10px auto;
			border: 2px solid dodgerBlack;
			box-shadow: 1px 2px 10px grey;
		}
	</style>
</head>
<body>

	
	<b> <font color="Black"> Load on Delivery Boxes </font></b>
	<iframe id="first" class="iframe-noc" src="http://del-graphite.admarvel.com/render?width=1230&from=-1hours&until=now&height=450&target=exclude(groupByNode(admarvel.delivery.system.load.avg_1.%7B*%7D%2C5%2C%22averageSeries%22)%2C%22ip-10-204-254-199%22)&title=Load&hideLegend=false&_salt=1367201670.479&yMax=&_uniq=0.3036221524234861" frameborder="0" width="1250" height="360"></iframe>

	
	<b> <font color="Black"> Queue Count On Delivery Boxes </font></b>
	<iframe id="second" class="iframe-noc" src="http://del-graphite.admarvel.com/render?width=1230&from=-1hours&until=now&height=450&target=groupByNode(admarvel.delivery.system.state.queued.%7B*%7D%2C5%2C%22averageSeries%22)&title=Queue%20Count%20(Ideally%20should%20be%20zero)&hideLegend=false&_uniq=0.24350168416276574&_salt=1380758174.349" frameborder="0" width="1250" height="380"></iframe>


	<b> <center><font color="Black"> Load on Delivery Boxes </font></center></b>
	<iframe id="third" class="iframe-noc" src="http://del-graphite.admarvel.com/render?width=1230&from=-1hours&until=now&height=450&target=groupByNode(admarvel.delivery.system.state.current.%7B*%7D%2C5%2C%22averageSeries%22)&title=Current%20Count%20(55%20is%20threshold)&hideLegend=false&_uniq=0.49801718769595027&_salt=1380758174.349" frameborder="0" width="1250"
			height="370"></iframe>

	<b> <center><font color="Black"> Opea QPS </font></center></b>
<!--Opera QPS	-->
<iframe id="third" class="iframe-noc" src="
http://del-graphite.admarvel.com/render?width=1230&from=-1hours&until=-&height=450&target=scale(groupByNode(admarvel.fam.postGetOfflineAd.delivery.req_count.sum.%7B*%7D%2C%206%2C%22sumSeries%22)%2C0.01666)&title=QPS&hideLegend=false&_salt=1367255398.909&_uniq=0.8927256800234318" frameborder="0" width="1250"
			height="420"></iframe>


<b> <center><font color="Black"> RTB QPS </font></center></b>
<!--RTB QPS	-->
<iframe id="third" class="iframe-noc" src="
			http://54.234.137.95/render?width=1230&from=-1hours&until=-&height=450&target=scale(groupByNode(rtb.delivery.request.num_requests.sum.%7B*%7D%2C%205%2C%22sumSeries%22)%2C0.01666)&title=QPS&hideLegend=false&_salt=1367255398.909&_uniq=0.7147051580250263" frameborder="0" width="1250"
			height="450"></iframe>


<b> <center><font color="Black"> RTB QPS </font></center></b>
<!--Sprite backlog	-->
<iframe id="third" class="iframe-noc" src="
			http://54.235.74.160/render?width=1230&from=-1hours&until=-&height=450&target=groupByNode(admarvel.deliverysprite.system.backlog.%7B*%7D.%7B*%7D%2C4%2C%27averageSeries%27)&hideLegend=false&title=Backlog&_uniq=0.527121587889269&_salt=1367201670.479&lineWidth=&yMax=" frameborder="0" width="1250"
			height="450"></iframe>


<b> <center><font color="Black"> Kafka Backlog </font></center></b>
<!--Kafka backlog	-->
<iframe id="third" class="iframe-noc" src="
http://54.235.74.160/render?width=1230&from=-1hour&until=-&height=450&target=groupByNode(admarvel.deliverykafka.system.backlog.%7B*%7D.%7B*%7D%2C4%2C%27averageSeries%27)&hideLegend=false&title=Backlog&_uniq=0.30731831793673337&_salt=1367201670.479&lineWidth=&yMax=" frameborder="0" width="1250"height="450"></iframe>


<b> <center><font color="Black"> Agency latency accross all entry point </font></center></b>
<!--Agency latency accross all entry point	-->
<iframe id="third" class="iframe-noc" src="
http://54.235.74.160/render?width=1230&from=-1hours&until=-&height=750&target=exclude(highestMax(groupByNode(admarvel.fam.*.delivery.agencies.latency.*.*%2C6%2C%22averageSeries%22)%2C100)%2C%22sum%22)&hideLegend=false&title=Agency%20latency%20across%20all%20entry%20points&_salt=1391089678.205&_uniq=0.2832179474644363" frameborder="0" width="1250"height="600"></iframe>




	<script type="text/javascript">
	var iframes = document.querySelectorAll(".iframe-noc");
	setInterval(function() {		
		document.location.reload(true);
	}, 60000);
	</script>			
</body>
</html>
