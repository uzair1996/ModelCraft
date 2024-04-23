import numpy as np
import cv2
from matplotlib import pyplot
print("zero")
img = cv2.imread('model.jpg')
print("one")
mask = np.zeros(img.shape[:2],np.uint8)
print("two")
bgdModel = np.zeros((1,65),np.float64)
fgdModel = np.zeros((1,65),np.float64)
print("three")
rect = (1000,0,5000,3000)
cv2.grabCut(img,mask,rect,bgdModel,fgdModel,5,cv2.GC_PR_BGD)

print("four")
# to show image
# cv2.imshow("image",img)

# to save image
mask2 = np.where((mask==2)|(mask==0),0,1).astype('uint8')
print("five")
img = img*mask2[:,:,np.newaxis]
print("six")
cv2.imwrite('newmodel.png',img)

#
# plt.imshow(img),plt.colorbar(),plt.show()
print("done")
