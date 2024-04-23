# newmask is the mask image I manually labelled
import cv2
import numpy as np

print(0)
img = cv2.imread('model.jpg')

newmask = cv2.imread('model.png',0)
print(1)
# //mask = np.zeros(None,np.uint8)
print(2)
# whereever it is marked white (sure foreground), change mask=1
# whereever it is marked black (sure background), change mask=0
mask[newmask == 1] = 0
print(3)

bgdModel = np.zeros((1,65),np.float64)
fgdModel = np.zeros((1,65),np.float64)
print(4)
mask = cv2.grabCut(img,mask,None,bgdModel,fgdModel,5,cv2.GC_INIT_WITH_MASK)
print(5)
mask = np.where((mask==2)|(mask==0),0,1).astype('uint8')
print(6)
img = newmask*mask[:,:,np.newaxis]
print(7)
cv2.imwrite('newmodelwithmask.png',img)
print("done")