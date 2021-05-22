import urllib.request
import requests
from bs4 import BeautifulSoup
# https://weejw.tistory.com/264 출저
from urllib.request import urlretrieve
# https://tariat.tistory.com/796

from datetime import datetime

 
url = "http://info.offexchange2.jp/offexchange/servlet/FindDayReportServlet"
req = urllib.request.Request(url)
sourcecode = urllib.request.urlopen(url).read()
soup = BeautifulSoup(sourcecode, "html.parser")

# 변수를 오브젝트로지정 
link = [] 

#table의 show클라스에서 a tag 전부가져오기
links = soup.find("table", class_="show").find_all("a")

# for 문을 이용해서 a Tag 의 href추출
for a in links:
    href = a.attrs['href']
    text = a.string
    
    link.append(href)

head = "http://info.offexchange2.jp/"
equ = link[1]
bond = link[5]

today = datetime.today().strftime("%Y%m%d")
fileNameEqu = "./" + today + "_BC327_EQU.csv"
fileNameBond = "./" + today + "_BC327_BOND.csv"

#파일다운주소및 경로 이름 정해서 저장
# 다운로드 조건 : 
# if (string.date() == format(date.today()-1, "yyyy/mm/dd/") {
# if (format(date.today()-1, "aaa") != "sat" AND != "sun" AND !="holyday") { 
urlretrieve(head+equ, fileNameEqu) 
urlretrieve(head+bond, fileNameBond) 
print(link[1])
print(link[5])
#    } else { print("전날이 휴일, 주말이면 데이터를 가져올 수 없습니다.") }
# }




 
# for href in soup.find("table", class_="show").find_all('tr'):
#     tag = href.find("a")["href"]
#     link.append(tag)
# print(link[0])
# print(link[1])
    



