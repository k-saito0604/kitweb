require('dotenv').config();

const nodemailer = require('nodemailer');

exports.handler = function(event, context, callback) {
  const type = "OAuth2";
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
      type:"OAuth2",
      user:"keisuke.saito@kitasp.jp",
      clientId:"187284571430-r4qo7dpgooplqiifrk9ue0lss69kh3l9.apps.googleusercontent.com",
      clientSecret:"HzXluk1wG9J17JupRBHZgczB",
      refreshToken:"1//04NpwTbGKPTFnCgYIARAAGAQSNgF-L9Irr760UeHO4ezZyu50Ron1UyNBhLMy_Jau_DvUwkW6Njt479pdpicV0PjdMTwuRIPe7A",
      accessToken: "ya29.a0Adw1xeX0QDvj9dRA92JvWvOaYL5bxSv7R-WWnBhJgfXIQll5Vnquf5O3p_-XA-9XaxLHsVC-ght-AV-TEBk7JwiKzf3F3mSJSFIEEnD2xlBCuCvNjxJdVmikrvYH2c4SpNBolQs-qVVslV5epkhRrZXfarKBXf7V5T8"   
    },
  });
/*
      user:"keisuke.saito@kitasp.jp",
      clientId:"187284571430-r4qo7dpgooplqiifrk9ue0lss69kh3l9.apps.googleusercontent.com",
      clientSecret:"HzXluk1wG9J17JupRBHZgczB",
      refreshToken:"1//04NpwTbGKPTFnCgYIARAAGAQSNgF-L9Irr760UeHO4ezZyu50Ron1UyNBhLMy_Jau_DvUwkW6Njt479pdpicV0PjdMTwuRIPe7A",
      accessToken: "ya29.a0Adw1xeX0QDvj9dRA92JvWvOaYL5bxSv7R-WWnBhJgfXIQll5Vnquf5O3p_-XA-9XaxLHsVC-ght-AV-TEBk7JwiKzf3F3mSJSFIEEnD2xlBCuCvNjxJdVmikrvYH2c4SpNBolQs-qVVslV5epkhRrZXfarKBXf7V5T8"  
*/

  console.log(event.body);

  let mailOptions = {
    from: `"kit-madoguch@kitasp.com"<kit-madoguchi@kitasp.com>`,
    to: `${email}`,
    subject: 'ありがとうございます。フォームを送信いたしました',
    html: `${name}様　メッセージを送信しました。`,
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
