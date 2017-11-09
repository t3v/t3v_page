# --------------------------
# | T3v Page Configuration |
# --------------------------

plugin {
  tx_t3vpage {
    persistence {
      enableAutomaticCacheClearing = {$plugin.tx_t3vpage.persistence.enableAutomaticCacheClearing}

      storagePid = {$plugin.tx_t3vpage.persistence.storagePid}

      updateReferenceIndex = {$plugin.tx_t3vpage.persistence.updateReferenceIndex}
    }

    settings {
      # ...
    }

    view {
      layoutRootPaths {
        0 = {$plugin.tx_t3vpage.view.layoutRootPath}
      }

      templateRootPaths {
        0 = {$plugin.tx_t3vpage.view.templateRootPath}
      }

      partialRootPaths {
        0 = {$plugin.tx_t3vpage.view.partialRootPath}
      }
    }
  }
}