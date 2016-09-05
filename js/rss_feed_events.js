var feedpointer=new google.feeds.Feed("http://calendar.uga.edu/feeds/category/womens-gender-resources/")
feedpointer.setNumEntries(100) //Show 5 
feedpointer.load(formatoutput)


function formatoutput(result){
	if (!result.error){
		var rssoutput=""
		var today = new Date()
		var thefeeds=result.feed.entries
		for (var i=0; i<thefeeds.length; i++){
			var entrydate=new Date(thefeeds[i].publishedDate) //get date of entry
			var entryYear = entrydate.getFullYear()
			var entryMonth = (entrydate.getMonth()+1)
			var entryDay = entrydate.getDate()
			var entrydatestr=entryMonth+"/"+entryDay+"/"+entryYear

			if (entrydate > Date.now()){
				rssoutput+="<article class='item'><h3>"+thefeeds[i].title+"</h3><h4 style='color:#cc0000;'>"+entrydatestr+"</h4><p>"+thefeeds[i].content+"</p><a href='" + thefeeds[i].link + "'class='btn btn-xs btn-primary' target='_blank'>MORE DETAILS</a><hr></article>"
			}
			document.getElementById("events").innerHTML=rssoutput
			}
			if (rssoutput == ""){
				rssoutput+="<article class='item'><h3>Sorry, no upcoming events at this time.</h3></article>"
				document.getElementById("events").innerHTML=rssoutput
			}
		}

	else //if error fetching feed, alert human readable error message
	alert(result.error.message)
}
 