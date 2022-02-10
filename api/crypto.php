<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crypto News</h1>
    
<script>
    fetch("https://crypto-news15.p.rapidapi.com/news", {
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "crypto-news15.p.rapidapi.com",
		"x-rapidapi-key": "eb1e72cc85msh7eb2cd8ba3699b4p11bcfbjsn03ffff081aac"
	}
})
.then(response => {
	console.log(response);
})
.catch(err => {
	console.error(err);
});
</script>
</body>
</html>


