# MA-lidar-calendar
PHP calendar for ground-based Rayleigh lidar measurements. Available plots of measurements and model (re)analysis are stored in folders with the same content. Each instrument included in the calendar has its own folder in ./plots/ with different content-folders.

Files have to be named with the timestamp of the measurement followed by the duration, so the calendar can include it. 

%YYYY%MM%DD-%HH%MM_%HHh%MMmin.png

The folders have to be named based on the variables used in the php code (tmp,filter1,filter2,era5,ifs)