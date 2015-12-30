import logging
import os

logger = logging.getLogger()
if not os.path.exists("log"):
    os.mkdir("log")
"""
class Main():
    def __init__(self):
"""

logging.getLogger().info("Fooding Started")