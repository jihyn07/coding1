import pymysql # 없을 경우 pip install pymysql

# ddl : dababase definition language
def create(company):
    conn = pymysql.connect(user='root', passwd='', host='127.0.0.1', db='test1', charset='utf8')
    cursor = conn.cursor()
    cursor.execute("CREATE TABLE "+company+"(Date text, Open int, High int, Low int, Closing int, Volume int)")
    conn.commit()
    conn.close()

def drop(company):
    conn = pymysql.connect(user='root', passwd='', host='127.0.0.1', db='test1', charset='utf8')
    cursor = conn.cursor()
    cursor.execute("DROP TABLE "+company)
    conn.commit()
    conn.close()
    
# dml : dababase manipulation language
def insert(company):
    conn = pymysql.connect(user='root', passwd='', host='127.0.0.1', db='test1', charset='utf8')    
    cursor = conn.cursor()
    cursor.execute("INSERT INTO "+company+" VALUES('21.06.04', 97000, 98600, 96900, 98000, 321405)")
    print(cursor.rowcount, "record inserted") # rowcount of record schema >= 0
    conn.commit()
    conn.close()

def select(company):
    conn = pymysql.connect(user='root', passwd='', host='127.0.0.1', db='test1', charset='utf8')
    cursor = conn.cursor()
    cursor.execute("SELECT * FROM "+company+" WHERE 1") # WHERE Closing > 40000
    print(cursor.fetchall())
    conn.commit()
    conn.close()

def update(company):
    conn = pymysql.connect(user='root', passwd='', host='127.0.0.1', db='test1', charset='utf8')
    cursor = conn.cursor()
    cursor.execute("UPDATE "+company+" SET `Volume`=999999 WHERE Date='21.06.04'")
    print(cursor.rowcount, "record updated")
    conn.commit()
    conn.close() 

def delete(company):
    conn = pymysql.connect(user='root', passwd='', host='127.0.0.1', db='test1', charset='utf8')
    cursor = conn.cursor()
    cursor.execute("DELETE FROM "+company+" WHERE Date='21.06.04'")
    print(cursor.rowcount, "record deleted")
    conn.commit()
    conn.close()

if __name__ == "__main__":
    # create('GS')
    # drop('GS')
    insert('GS')
    update('GS')
    # delete('GS')
