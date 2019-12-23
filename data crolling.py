from selenium import webdriver
import time

result = {}
search = ['김채린', '제주과학고등학교', '제주과학고', '제주과고']

driver = webdriver.Chrome('chromedriver.exe')
driver.implicitly_wait(3)
# url에 접근한다.
driver.get('http://surffing.net')

for i in search:
    enter = driver.find_element_by_name('saerchKeyword')
    enter.clear()
    enter.send_keys(i)
    driver.find_element_by_class_name('key-btn').click()
    time.sleep(3)
    data1 = driver.find_element_by_xpath('//*[@id="apiGrid"]/div[2]/table/tbody/tr[3]/td[2]').text
    data2 = driver.find_element_by_xpath('//*[@id="apiGrid"]/div[2]/table/tbody/tr[3]/td[3]').text
    result[i]=(int(data1)+int(data2))
print('완료')
print(result)
driver.close()
