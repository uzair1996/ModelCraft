import numpy as np
import cv2
from matplotlib import pyplot as plt

img = cv2.imread('image_one.jpg')
mask = np.zeros(img.shape[:2],np.uint8)

bgdModel = np.zeros((1,65),np.float64)
fgdModel = np.zeros((1,65),np.float64)

rect = (50,50,1800,1200)
cv2.grabCut(img,mask,rect,bgdModel,fgdModel,5,cv2.GC_INIT_WITH_RECT)

# to show image
# cv2.imshow("image",img)

# to save image
mask2 = np.where((mask==2)|(mask==0),0,1).astype('uint8')
img = img*mask2[:,:,np.newaxis]
cv2.imwrite('newImage.png',img)

#
# plt.imshow(img),plt.colorbar(),plt.show()
print("done")