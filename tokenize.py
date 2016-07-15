import re
from sys import argv
import sys

script, filename=argv
text=open(filename)
s=text.read()
y= re.split('\s+',s)

'''rite=open("new.txt", 'w')'''
temp=[]
values=[0,1,2,3,4,5,6,7,8,9,10,11,12,13]
stopword1=['with','more','than','for','a','an','the','then','to','I','as','am','and','is']

for word in y:
        m=0
        for val in values:
                if word==stopword1[val]:
                        '''x=rite.write("--- ")'''
                        break
                else:
                        m=m+1
                if m==7:
                        '''x=rite.write(word)'''
                        '''x=rite.write(" ")'''
                        temp.append(word)
                        break
temp.append("end")
temp.append("qq")
#rite1=open("new1.txt", 'w')
values=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]
val=0
sys.stdout.write("Name :: ")
sys.stdout.write(temp[0])
sys.stdout.write(" ")
sys.stdout.write(temp[1])
sys.stdout.write("\n\n")
i=2
keywords=['Personal','PERSONAL','Location','Domain','Industry','Languages','Interests','INTERESTS','SUMMARY','Summary','COMPETENCIES','Competencies','GRADUATION','Graduation','EXPERIENCE','Experience','SKILLS','Skills','QUALIFICATIONS','Qualifications','CERTIFICATION','Certifications','EDUCATION','Education','PROJECTS','Projects','EXPERTISE','Expertise','ACADEMICS','Academics','asdfg','ACHIEVEMENTS','Achievements']
while temp[i]!="qq":

        for val in values:
                if temp[i]==keywords[val]:
			sys.stdout.write("")
                        sys.stdout.write(temp[i])
                        sys.stdout.write(" :: ")
                        count=0
                        while count==0:
                                m=0
                                i=i+1
                                sys.stdout.write(" ")
                                if temp[i]=="qq":
                                        count=1
                                check=0
                                for m in values:
                                        if temp[i]==keywords[m]:
                                                sys.stdout.write("\n")
                                                sys.stdout.write("\n")
                                                sys.stdout.write("\n")
                                                check=1
                                                count=1
                                                m=m+1
                                                val=0
                                                i=i-1
                                                break
                                        m=m+1
                                if check==0:
                                        sys.stdout.write(temp[i])
                else:
                        val=val+1
        i=i+1

text.close()
rite.close()
