from selenium import webdriver
import time

result = {}
search = ['제주과학고등학교', '제주과학고', '제주과고', '제곽특별실',
          '성실', '창의', '봉사', '구상나무', '철쭉', '탐라교육원',
          '제주과학고등학교 영재교육원', '제주과학고등학교 나무위키',
          '산울림', 'Chaos', 'Chemikid', 'Globe',
          'Seed', 'Common', '한라 에코 레인져스', '고급화학', '고급물리학',
          '고급생명과학', '고급지구과학', '물리학실험', '화학실험', '심화수학',
          'PL','수학의 정석', '수학의 바이블', '김홍국', '이창훈', '오광주', '김명욱',
          '고지희', '이현주', '이지연', '오동율', '고민수', '배상준', '구남철',
          '홍동미', '구남철', '김현석', '현미혜', '김보건', '진우용', '김용국',
          '원선아', '강지현', '주상민', '오기만', '허만영', '양동애', '양원', '양승희',
          '강금구', '김석종', '김도연', '김영복', '강윤정', '양태영', '홍재병', '강문혁',
          '허지예', '함명희', '현길자']

data1keep = 0
data2keep = 0
    
driver = webdriver.Chrome('chromedriver.exe')
driver.implicitly_wait(3)
# url에 접근한다.
driver.get('http://surffing.net')

for i in search:
    enter = driver.find_element_by_name('saerchKeyword')
    enter.clear()
    enter.send_keys(i)
    driver.find_element_by_class_name('key-btn').click()
    time.sleep(1.5)
    data1 = driver.find_element_by_xpath('//*[@id="apiGrid"]/div[2]/table/tbody/tr[3]/td[2]').text
    data2 = driver.find_element_by_xpath('//*[@id="apiGrid"]/div[2]/table/tbody/tr[3]/td[3]').text
    if len(data1) > 4:
        mid = list(data1)
        data1 = ''.join(list(filter((',').__ne__, mid)))
    if len(data2) > 4:
        mid = list(data2)
        data2 = ''.join(list(filter((',').__ne__, mid)))
    if data1 == data1keep and data2 == data2keep:
        result[i]=0
        continue
    result[i]=(int(data1)+int(data2))
    data1keep = data1
    data2keep = data2
print('완료')
print(result)
driver.close()
