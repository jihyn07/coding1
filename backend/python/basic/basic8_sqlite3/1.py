import sqlite3 # 없을 경우 pip install sqlite3

def setDB():
    conn = sqlite3.connect("kospi.db")

# ddl : dababase definition language
def create(company):
    conn = sqlite3.connect("kospi.db")
    cursor = conn.cursor()
    cursor.execute("CREATE TABLE "+company+"(Date text, Open int, High int, Low int, Closing int, Volume int)")
    if cursor.rowcount == -1: print("1 table created") # rowcount of db/table schema = -1
    conn.commit()
    conn.close()

def drop(company):
    conn = sqlite3.connect("kospi.db")
    cursor = conn.cursor()
    cursor.execute("DROP TABLE "+company)
    if cursor.rowcount == -1: print("1 table dropped")
    conn.commit()
    conn.close()
    
# dml : dababase manipulation language
def insert(company):
    conn = sqlite3.connect("kospi.db")    
    cursor = conn.cursor()
    cursor.execute("INSERT INTO "+company+" VALUES('21.06.04', 97000, 98600, 96900, 98000, 321405)")
    print(cursor.rowcount, "record inserted") # rowcount of record schema >= 0
    conn.commit()
    conn.close()

def select(company):
    conn = sqlite3.connect("kospi.db")
    cursor = conn.cursor()
    cursor.execute("SELECT * FROM "+company+" WHERE 1") # WHERE Closing > 40000
    print(cursor.fetchall())
    conn.commit()
    conn.close()

def update(company):
    conn = sqlite3.connect("kospi.db")
    cursor = conn.cursor()
    cursor.execute("UPDATE "+company+" SET `Volume`=999999 WHERE Date='21.06.04'")
    print(cursor.rowcount, "record updated")
    conn.commit()
    conn.close() 

def delete(company):
    conn = sqlite3.connect("kospi.db")
    cursor = conn.cursor()
    cursor.execute("DELETE FROM "+company+" WHERE Date='21.06.04'")
    print(cursor.rowcount, "record deleted")
    conn.commit()
    conn.close()

if __name__ == "__main__":
    setDB()
    create('GS')
    insert('GS')
    update('GS')
