<div class="body_padded" style= "direction: rtl; ">
<h1>(راهنما - حمله بی رحمانه (ورود</h1>
<div id="code">
<table style="border: 2px #C0C0C0 solid;" width="100%" bgcolor="white">
<tbody>
<tr>
<td>
<div id="code">
<h3>درباره</h3>
<p style= "direction: rtl; ">کرک کردن پسورد فرایند بازیابی پسوردها از داده&zwnj;هایی است که در سیستم کامپیوتری ذخیره&zwnj;شده و یا توسط آن منتقل شده است. یک روش متداول حدس زدن&zwnj;های مکرر برای پسورد است.</p>
<p>کاربران اغلب پسوردهای ضعیفی انتخاب می‌کنند. نمونه هایی از این موارد نا امن شامل تک کلمه‌های یافت‌شده در دیکشنری‌ها، نام‌های خانوادگی، هر پسورد بسیار کوتاه (معمولا پسوردهای زیر ۶ یا ۷ کاراکتر) و یا الگوهای قابل پیش بینی (به عنوان مثال جاگذاری حروف با علامت‌ها و اعداد مثلا تغییر کلمه "password" به "p@55w0rd") می‌باشد.</p >
<p>ساختن یک لیست پسورد هدفمند، که مختص هدف مورد نظر تولید می‌شود، اغلب مواقع درصد موفقیت بالایی را موجب می‌شود. ابزارهای عمومی بسیاری وجود دارند که که لیست پسورد دلخواه را بسته به ترکیبی از وب‌سایت شرکت‌ها، شبکه‌های اجتماعی شخصی و دیگر اطلاعات معمول (همچون تاریخ تولد یا سال فارغ‌التحصیلی) می‌سازند.</p>
<p style= "direction: rtl; ">گزینه آخر، آزمودن تمامی پسوردهای ممکن است که با عنوان حمله بی‌رحمانه از آن یاد می‌شود. در تئوری، اگر محدودیتی برای تعداد آزمون و خطاها وجود نداشته باشد، با توجه به این‌که قوانین یک پسورد قابل قبول به صورت عمومی مشخص است، یک حمله بی‌رحمانه همیشه موفق به کشف پسورد خواهد بود؛ اما هرچه طول پسورد افزایش پیدا می‌کند، به همان نسبت نیز تعداد پسوردهای ممکن افزایش یافته و در نتیجه فرایند حمله زمان بیشتری نیاز خواهد داشت.</p>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<h3>هدف</h3>
<p style= "direction: rtl; ">هدف شما این است که پسورد مدیر را توسط حمله بی‌رحمانه به‌دست بیاورید. امتیازات بیشتر نیز مختص یافتن پسوردهای ۴ کاربر دیگر است.</p>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<h3>سطح پایین</h3>
<p>توسعه‌دهنده هیچ‌گونه روش محافظتی را به‌کار نبرده‌است که به هرکس این اجازه را می‌دهد تا هر تعداد دلخواه تلاش را برای آزمون هرگونه پسورد و برای هر کاربر بدون هیچگونه عواقبی انجام دهد.</p>
<p>&nbsp;</p>
<h3>سطح متوسط</h3>
<p>این مرحله یک حالت خواب برای صفحه ورود ناموفق اضافه کرده‌است. این بدین معنی است که هنگامی که شما به صورت اشتباه ورود می‌کنید، ۲ ثانیه زمان تاخیر بیشتر قبل از نمایان‌شدن صفحه خواهد بود.</p>
<p>این روش تنها سرعت فرایند پردازش درخواست‌ها را کاهش داده و در نتیجه زمان حمله را طولانی‌تر خواهد کرد.</p>
<p>&nbsp;</p>
<h3>سطح بالا</h3>
<p style= "direction: rtl; ">در این‌جا از یک "نشانه ضد جعل درخواست فرا وبگاهی" (anti Cross-Site Request Forgery (CSRF) token) استفاده شده‌است. یک باور اشتباه قدیمی وجود دارد که این می‌تواند جلوی حملات بی‌رحمانه را بگیرد. این‌گونه نیست. این مرحله هم‌چنین مرحله متوسط را با استفاده از زمان‌های تصادفی میان ۲ و ۴ ثانیه هنگام ورودهای ناموفق بهبود داده است. هدف از این کار، تلاش برای گمراه‌ساختن هرگونه پیش‌بینی از طریق زمان پاسخ است.</p>
<p>استفاده از یک فرم <?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/CAPTCHA', 'کپچا' ); ?> نیز می‌توانست تاثیری مشابه نشانه CSRF داشته باشد.</p>
<p>&nbsp;</p>
<h3>سطح غیرممکن</h3>
<p style= "direction: rtl; ">در مرحله غیرممکن،حمله بی‌رحمانه (و شمارش کاربران) نبایستی ممکن باشد. توسعه دهنده یک قابلیت "مسدود کردن" اضافه کرده‌است ، به گونه‌ای که اگر ۵ تلاش برای ورود ناموفق در ۱۵ دقیه اخیر انجام‌ شده‌باشد، کاربر تحریم‌شده امکان ورود نخواهد داشت.</p>
<p style= "direction: rtl; ">اگر کاربر مسدودشده، حتی با پسورد درست تلاش برای ورود انجام دهد، صفحه اعلام خواهد کرد که نام کاربری یا رمز عبور اشتباه است. این حالت دانستن تمایز بین این‌ که کاربری با نام وارد شده در سیستم، با رمز‌عبور داده‌شده وجود دارد ندارد و یا این‌که کاربر مسدود شده است، غیرممکن می‌سازد.</p>
<p style= "direction: rtl; ">این می‌تواند با وجود شخصی که مکررا تلاش برای ورود به‌ حساب شخص‌ دیگری انجام دهد، منجر به "رد سرویس" (Denial of Service - DoS) گردد. این مرحله می‌تواند با قراردادن شخص نفوذگر به لیست‌سیاه (به‌عنوان نمونه آی‌پی، آدرسو یا کشور شخص موردنظر) بهبود پیدا کند.</p>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<p>Reference: <?php echo dvwaExternalLinkUrlGet( 'https://en.wikipedia.org/wiki/Password_cracking' ); ?></p>
</div>
