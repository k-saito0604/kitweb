require('dotenv').config();

  const nodemailer = require('nodemailer');
  const { name, email, message } = JSON.parse(event.body).payload.data

exports.handler = function(event, context, callback) {
    let transporter = nodemailer.createTransport({
        host: 'smtp.gmail.com',
        port: 465,
        secure: true,
        auth: {
            type: 'OAuth2',
            user: process.env.MAIL_LOGIN,
            clientId: process.env.CLIENT_ID,
            clientSecret: process.env.CLIENT_SECRET,
            refreshToken: process.env.REFRESH_TOKEN,
            accessToken: process.env.ACCESS_TOKEN
        }
    });
    console.log(event.body);

    transporter.sendMail({
      from: `""<${user}>`,
      to: `${email}`,
      subject: 'フォームを送信いたしました',
      html: '<p>メッセージを送信しました。</p>',
    }, function(error, info) {
    	if (error) {
    		callback(error);
    	} else {
    		callback(null, {
			    statusCode: 200,
			    body: "Ok"
	    	});
    	}
    });
}
