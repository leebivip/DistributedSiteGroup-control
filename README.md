# DistributedSiteGroup-control
战群系统总的控制平台，分布式的战群管理系统（第二个版本）。第一个版本只是单纯的模拟多个站点（使用apache rewite跟泛域名解析）。而第二个版本，使用万网主机作为单个节点，SiteGroup 对所有网站进行集群化管理，充分实现数据的整合以及实现网站间数据通信，数据推送与接收等。站群管理系统是网站集群的“交换机”，集群中各站点的数据直接与站群系统总控制平台进行接驳和联络，实现站群信息共享、交换、推送等；同时，各站点不直接进行信息交换、共享，充分保障权限的唯一性和系统安全性。集群中的各个子站点互不干扰，保持高度的独立性。例如：某子站发生故障，并不会影响其他子站点的运行；
