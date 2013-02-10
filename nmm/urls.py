from django.conf.urls import patterns, include, url

# Uncomment the next two lines to enable the admin:
# from django.contrib import admin
# admin.autodiscover()
from django.views.generic import TemplateView

urlpatterns = patterns('',
    # Examples:
    url(r'^$', TemplateView.as_view(template_name="index.php"), name='home'),
    url(r'^design/$', TemplateView.as_view(template_name="design.html"), name='design'),
    url(r'^messages/$', TemplateView.as_view(template_name="messages.html"), name='messages'),
    url(r'^execution/$', TemplateView.as_view(template_name="execution.html"), name='execution'),
    url(r'^deal_setup/$', TemplateView.as_view(template_name="deal_setup.html"), name='deal_setup'),
    # url(r'^nmm/', include('nmm.foo.urls')),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    # url(r'^admin/', include(admin.site.urls)),
)
