require('dotenv').config();

const nodemailer = require('nodemailer');


exports.handler = function(event, context, callback) {
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
      type: 'OAuth2',
      user: user,
      clientId: clientId,
      clientSecret: clientSecret,
      refreshToken: refreshToken,
      accessToken: accessToken
    },
  });

  console.log(event.body);

  let mailOptions = {
    from: `<${user}>`,
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