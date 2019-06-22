const express = require('express')
const app = express()
const path = require('path')
app.use(express.urlencoded({ extended: false }));
app.use(express.static(path.join(__dirname, 'public')));
const port = process.env.PORT || 80

app.get('/postage',function(req,res) {
      res.sendFile('postage.html', {
        root: path.join(__dirname, './')
    })
});

app.post('/result', function (req, res) {
  console.log(req.body);
	if(req.body.type == "stamped"){
		if(req.body.weight <= 1)
			res.send('Total Cost: $0.55');
		else if(req.body.weight <= 2)
			res.send('Total Cost: $0.70');
		else if(req.body.weight <= 3)
			res.send('Total Cost: $0.85');
		else if(req.body.weight <= 3.5)
			res.send('Total Cost: $1.00');
		else
			res.send('Total Weight Exceeded!');
	}

	else if(req.body.type == "metered"){
		if(req.body.weight <= 1)
			res.send('Total Cost: $0.50');
		else if(req.body.weight <= 2)
			res.send('Total Cost: $0.65');
		else if(req.body.weight <= 3)
			res.send('Total Cost: $0.80');
		else if(req.body.weight <= 3.5)
			res.send('Total Cost: $0.95');
		else
			res.send('Total Weight Exceeded!');
	}

	else if(req.body.type == "flats"){
		if(req.body.weight <= 1)
			res.send('Total Cost: $1.00');
		else if(req.body.weight <= 2)
			res.send('Total Cost: $1.15');
		else if(req.body.weight <= 3)
			res.send('Total Cost: $1.30');
		else if(req.body.weight <= 4)
			res.send('Total Cost: $1.45');
		else if(req.body.weight <= 5)
			res.send('Total Cost: $1.60');
		else if(req.body.weight <= 6)
			res.send('Total Cost: $1.75');
		else if(req.body.weight <= 7)
			res.send('Total Cost: $1.90');
		else if(req.body.weight <= 8)
			res.send('Total Cost: $2.05');
		else if(req.body.weight <= 9)
			res.send('Total Cost: $2.20');
		else if(req.body.weight <= 10)
			res.send('Total Cost: $2.35');
		else if(req.body.weight <= 11)
			res.send('Total Cost: $2.50');
		else if(req.body.weight <= 12)
			res.send('Total Cost: $2.65');
		else if(req.body.weight <= 13)
			res.send('Total Cost: $2.80');
		else
			res.send('Total Weight Exceeded!');
	}
	else if(req.body.type == "retail"){
		if(req.body.weight <= 1)
			res.send('Total Cost: $3.66');
		else if(req.body.weight <= 2)
			res.send('Total Cost: $3.66');
		else if(req.body.weight <= 3)
			res.send('Total Cost: $3.66');
		else if(req.body.weight <= 4)
			res.send('Total Cost: $3.66');
		else if(req.body.weight <= 5)
			res.send('Total Cost: $4.39');
		else if(req.body.weight <= 6)
			res.send('Total Cost: $4.39');
		else if(req.body.weight <= 7)
			res.send('Total Cost: $4.39');
		else if(req.body.weight <= 8)
			res.send('Total Cost: $4.39');
		else if(req.body.weight <= 9)
			res.send('Total Cost: $5.19');
		else if(req.body.weight <= 10)
			res.send('Total Cost: $5.19');
		else if(req.body.weight <= 11)
			res.send('Total Cost: $5.19');
		else if(req.body.weight <= 12)
			res.send('Total Cost: $5.19');
		else if(req.body.weight <= 13)
			res.send('Total Cost: $5.71');
		else
			res.send('Total Weight Exceeded!');
	}

});

app.listen(port, () => console.log(`Example app listening on port ${port}!`))