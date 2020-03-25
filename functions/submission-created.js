require('dotenv').config();

const nodemailer = require('nodemailer');

const headers = {
  'Access-Control-Allow-Origin': 'http://localhost:3000',
  'Access-Control-Allow-Headers': 'Content-Type',
  'Access-Control-Allow-Credentials': true,
};

exports.handler = function(event, context, callback) {
  const user = "keisuke.saito@kitasp.jp";
  const clientId = "433042919834-kfd210drarjfr2s85vhfojriinqaso2e.apps.googleusercontent.com";
  const clientSecret = "vflzyiecQg2T0Hs6Yvlj8zW_";
  const refreshToken = "1//04rgAISOJglFcCgYIARAAGAQSNgF-L9Irce3Z8-CTwSLhRTwg51xDoylIBzD_-LLlYWd6mxp2r9c6XW5HVWdXpeCEoQvrbKViMg";
  const accessToken = "ya29.a0Adw1xeUiMdnsAJkb60P7WvZo1k8qioiXPu9wj1kEgMlpXZdYvarmRRouCfoiho7pRHbR-cW7r3WdGR8cCfhq5wao3MQ8itghhqnil1tpDybgCzvI4BWGxow4iYRtLbDwhO6gwZEor7u3eGnbJtau5rIoLcpkWuv_pVw";
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