import urllib.request
import requests
from bs4 import BeautifulSoup
from urllib.request import urlretrieve
 
url = "http://info.offexchange2.jp/offexchange/servlet/FindDayReportServlet"
req = urllib.request.Request(url)
sourcecode = urllib.request.urlopen(url).read()
soup = BeautifulSoup(sourcecode, "html.parser")
tables =soup.find("table", class_="show")
link = []  
for i in tables:
    i = tables.find_all('tr')
    
    tag = i.find("a")["href"]
    print(tag)
#     link.append(tag)
# print(link[0])
# print(link[1])