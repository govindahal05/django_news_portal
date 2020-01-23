from django.urls import path
from news import views

urlpatterns = [
    path("create/", views.NewsCreateView.as_view(), name="create_news"),
    path("<category_id>/",views.CategoryNewsView.as_view(),name="category_news")
]
