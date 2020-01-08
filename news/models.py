from django.db import models
from django.contrib.auth.models import User
# Create your models here.

class News(models.Model):
    CATEGORIES = (("0","Politics"),
    ("1","Sports"),
    ("3","Business"),
    ("4","Entertainment"),
    ("0","Arts")
    )
    title = models.CharField(max_length=255)
    content = models.TextField()
    count = models.IntegerField()
    category = models.CharField(max_length=2, choices=CATEGORIES)
    author = models.ForeignKey(User, on_delete=models.SET_NULL, null=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)
    cover_image = models.ImageField(upload_to="news", null=True)
