require('dotenv').config();

const nodemailer = require('nodemailer');
const {OAuth2} = google.auth; 
const OAUTH_PLAYGROUND = ' https://developers.google.com/oauthplayground' ; 


exports.handler = function(event, context, callback) {
  const type = 'OAuth2';
  const user = process.env.MAIL_LOGIN;
  const clientId = process.env.CLIENT_ID;
  const clientSecret = process.env.CLIENT_SECRET;
  const refreshToken = process.env.REFRESH_TOKEN;
  const accessToken = process.env.ACCESS_TOKEN;
  const { name, email, message } = JSON.parse(event.body).payload.data
  
  console.log(user);

  let transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    port: 465,
    secure: true,
    auth: {
      type,
      user,
      clientId,
      clientSecret,
      refreshToken,
      accessToken,
      OAUTH_PLAYGROUND
    },
  });

  console.log(event.body);

  let mailOptions = {
    from: `""<${user}>`,
    to: `${email}`,
    subject: 'フォームを送信いたしました',
    html: '<p>メッセージを送信しました。</p>',
  };

  transporter.sendMail(mailOptions, function(error, info) {
    if (error) {
      callback(error);
    } else {
      callback(null, {
        statusCode: 200,
        body: 'Ok',
      });
    }
  });
};