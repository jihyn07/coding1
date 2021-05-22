from bs4 import BeautifulSoup as bs
html = 'http://info.offexchange2.jp/offexchange/servlet/FindDayReportServlet'
soup = bs(html, "html.parser")
a = soup.html.body.ul.li.a
a.attrs
